import axios from "axios"

const USERS_REST_API_URL = 'http://localhost:8000/ims/getallusr';

class userService{

    getUsers(){
        return axios.get(USERS_REST_API_URL);
    }

}

export default new userService();
