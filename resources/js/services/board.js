class Board {
    axios
    baseUrl

    constructor(axios) {
        this.axios = axios
        this.baseUrl = 'http://localhost/api/'
    }

    getAll(params) {
        let self = this;
        return self.axios.get(`${self.baseUrl}board`);
    }

    get(id) {
        let self = this;
        return self.axios.get(`${self.baseUrl}board/${id}`);
    }
}

export default Service