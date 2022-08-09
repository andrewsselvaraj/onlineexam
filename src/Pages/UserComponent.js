import React from "react";
import UserService from "../services/UserService";

class UserComponent extends React.Component {

    constructor(props){
        super(props)
        this.state = {
            users:[]
        }
    }

    componentDidMount(){
        UserService.getUsers().then((response)=> {
            this.setState({users:response.data})
        }); 
    }

    render (){
        return (
            <div>
                <h1 className = "text-center"> Users List </h1>
                <table className = "table table-striped">
                    <thead>
                        <tr>
                            <td> User Id </td>
                            <td> User Name </td>
                            <td> User Email </td>
                            <td> User Designation </td>
                            <td> User Role </td>
                            <td> User Company </td>

                        </tr>
                    </thead>
                    <tbody>
                         {
                            this.state.users.map(
                                user =>
                                <tr key = {user.user_id}>
                                    <td> {user.user_id}</td>
                                    <td>{user.user_name}</td>
                                    <td>{user.user_email}</td>
                                    <td>{user.user_designation}</td>
                                    <td>{user.user_role}</td>
                                    <td>{user.user_company}</td>
                                </tr>
                            )
                         }
                    </tbody>
                </table>

            </div>
        )
    }

}

export default UserComponent