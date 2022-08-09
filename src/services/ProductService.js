import axios from "axios"

const USERS_REST_API_URL = 'http://localhost:8000/ims/getallprod';

class productService{

    getProducts(){
        return axios.get(USERS_REST_API_URL);
    }

}

export default new productService();
