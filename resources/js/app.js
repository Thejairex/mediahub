{/* <script>
function toastHandler() {
    return {
        toasts: [],

        add(toast) {
            const id = Date.now()

            this.toasts.push({
                id,
                ...toast,
            })

            setTimeout(() => {
                this.toasts = this.toasts.filter(t => t.id !== id)
            }, 4000)
        },
    }
}
</script> */}