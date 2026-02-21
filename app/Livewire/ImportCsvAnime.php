<?php

namespace App\Livewire;

use App\Models\Activity;
use App\Models\MediaItems;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

#[Layout('components.layouts.auth')]
#[Title('Import CSV Anime')]
class ImportCsvAnime extends Component
{
    use WithFileUploads;
    public $step = 1;
    public $csvFile;
    public $headers = [];
    public $mapping = [];
    public $preview = [];
    public $mediaItems = [];

    public $importedCount = 0;

    public $normalizedPreview = [];
    public $showSuccessModal = false;

    public $styleStatus = [
        'watching' => 'green',
        'completed' => 'blue',
        'plan_to_watch' => 'teal',
        'on_hold' => 'yellow',
        'dropped' => 'red',
    ];

    public $fields = [
        'title' => [
            'label' => 'Title',
            'icon' => 'title',
            'required' => true,
        ],
        'status' => [
            'label' => 'Status',
            'icon' => 'density_medium',
            'required' => false,
            'options' => [
                'watching' => 'Watching',
                'completed' => 'Completed',
                'on_hold' => 'On Hold',
                'dropped' => 'Dropped',
                'plan_to_watch' => 'Plan to Watch',
            ],
        ],
        'progress_current' => [
            'label' => 'Progress',
            'icon' => 'live_tv',
            'required' => false,
        ],
        'progress_total' => [
            'label' => 'Total',
            'icon' => 'check_box',
            'required' => false,
        ],
        'notes' => [
            'label' => 'Notes',
            'icon' => 'notes',
            'required' => false,
        ],
    ];
    public function render()
    {
        return view('livewire.import-csv-anime');
    }

    public function nextStep()
    {
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function uploadFile()
    {
        $this->validate([
            'csvFile' => 'required|file|mimes:csv,txt',
        ]);

        $this->processCsv();
        $this->nextStep();
    }

    public function processCsv()
    {
        $file = $this->csvFile->getRealPath();
        $handle = fopen($file, 'r');
        $headers = fgetcsv($handle);
        $this->headers = $headers;

        while (($row = fgetcsv($handle)) !== false) {
            $this->preview[] = $row;
        }

        fclose($handle);
    }

    public function updatedCsvFile()
    {
        $this->validate([
            'csvFile' => 'required|file|mimes:csv,txt',
        ]);

        $this->processCsv();
        $this->nextStep();
    }

    public function buildPreview()
    {
        $this->normalizedPreview = [];

        // índice de columnas
        $headerIndexes = array_flip($this->headers);

        // solo primeras 5 filas
        $rows = array_slice($this->preview, 0, 5);

        foreach ($rows as $row) {

            $item = [];

            foreach ($this->mapping as $field => $csvColumn) {

                // VALOR FIJO
                if (str_starts_with($csvColumn, '__static__:')) {
                    $item[$field] = str_replace('__static__:', '', $csvColumn);
                    continue;
                }

                // COLUMNA CSV NORMAL
                if (!isset($headerIndexes[$csvColumn])) {
                    $item[$field] = null;
                    continue;
                }

                $index = $headerIndexes[$csvColumn];

                $item[$field] = $row[$index] ?? null;
            }

            $this->normalizedPreview[] = $item;
        }
        $this->nextStep();
    }

    public function updatedMapping()
    {
        $this->buildPreview();
    }

    public function canProceed()
    {
        foreach ($this->fields as $key => $field) {
            if ($field['required'] && empty($this->mapping[$key])) {
                return false;
            }
        }

        return true;
    }

    public function normalizeAllRows()
    {
        $normalized = [];

        $headerIndexes = array_flip($this->headers);

        foreach ($this->preview as $row) {

            $item = [];

            foreach ($this->mapping as $field => $csvColumn) {

                // valor fijo
                if (str_starts_with($csvColumn, '__static__:')) {
                    $item[$field] = str_replace('__static__:', '', $csvColumn);
                    continue;
                }

                // columna CSV
                if (!isset($headerIndexes[$csvColumn])) {
                    $item[$field] = null;
                    continue;
                }

                $index = $headerIndexes[$csvColumn];
                $item[$field] = $row[$index] ?? null;
            }

            $normalized[] = $item;
        }

        return $normalized;
    }

    public function import()
    {
        $this->validate([
            'mapping' => 'required|array',
        ]);
        $rows = $this->normalizeAllRows();
        $this->importedCount = 0;
        foreach ($rows as $item) {

            // seguridad mínima
            if (empty($item['title'])) {
                continue;
            }
            MediaItems::create([
                'name' => $item['title'],
                'type' => 'anime',
                'status' => $item['status'] ?? null,
                'progress_current' => (int) $item['progress_current'] ?? 0,
                'progress_total' => (int) $item['progress_total'] ?? null,
                'notes' => $item['notes'] ?? null,
                'user_id' => auth()->id(),
            ]);
            $this->importedCount++;
        }

        $this->dispatch('toast', type: 'success', message: 'Anime imported successfully!');

        $this->reset([
            'csvFile',
            'headers',
            'mapping',
            'preview',
            'normalizedPreview'
        ]);

        $this->showSuccessModal = true;

        $this->step = 1;
    }
}