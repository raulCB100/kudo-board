class Messages {
    static showErrorMessage(error = null) {
        app.$buefy.toast.open({
            message: error === null ? 'Error desconocido, inténtalo nuevamente por favor.' : error,
            type: 'is-danger',
            duration: 5000
        });
    }

    static showSuccessMessage(message) {
        try {
            app.$buefy.toast.open({
                message: message,
                type: 'is-success',
                duration: 5000
            });
        } catch (e) {
            if (env.DEBUG) {
                console.log(e);
            }
        }

    }

    static showInfoMessage(message) {
        app.$buefy.toast.open({
            message: message,
            type: 'is-info',
            duration: 5000
        })
    }

    static showWarningMessage(message = null) {
        app.$buefy.toast.open({
            message: message !== null ? message : '¡Error desconocido, inténtalo nuevamente por favor!',
            type: 'is-warning',
            duration: 5000
        })
    }
}

export default Messages;