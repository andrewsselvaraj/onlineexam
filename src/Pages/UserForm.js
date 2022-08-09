import React, {Component} from "react";
import axios from 'axios'

class UserForm extends Component {
    constructor(props){
        super(props)

        this.state = {
            user_id:'',
            user_name: '',
            user_email: '',
            user_password: '',
            user_company_id: '',
            user_designation: '',
            user_role:'',
            user_updated_by: '',
            user_updated_date_time:''

        }
    }

    handleUseridChange = (event) => {
        this.setState({
            user_id: event.target.value
        })
    }
    
    handleUsernameChange = (event) => {
        this.setState({
            user_name: event.target.value
        })
    }
    
    handleemailChange = (event) => {
        this.setState({
            user_email: event.target.value
        })

    }
    
    handlepasswordChange = (event) => {
        this.setState({
            user_password: event.target.value
        })

    }

    handlecompanyChange = (event) =>{
        this.setState({
            user_company_id: event.target.value
        })

    }

    handledesignationChange = (event) => {
        this.setState({
            user_designation: event.target.value
        })

    }

    handleroleChange = (event) => {
        this.setState({
            user_role: event.target.value
        })
    }

    handleupdateuserChange = (event) => {
        this.setState({
            user_updated_by: event.target.value
        })

    }
    
    handleupdatedateChange = (event) => {
        this.setState({
            user_updated_date_time: event.target.value
        })
    }

    submitHandler = (event) => {
        event.preventDefault()
        console.log(this.state)
        axios
            .post('http://localhost:8000/ims/newusr',this.state)
            .then(response => {
                console.log(response)
                alert("User created successfully")
            })
            .catch(error => {
                console.log(error)
            })

    }

    
    render() {
        return (
            <form onSubmit={this.submitHandler}>
                <div>
                   <label>User Id</label> 
                   <input placeholder="userid" type = "text" value={this.state.user_id} onChange={this.handleUseridChange} />
                </div>
                <div>
                   <label>User Name</label> 
                   <input placeholder="username" type = "text" value={this.state.user_name} onChange={this.handleUsernameChange} />
                </div>
                <div>
                   <label>Email</label> 
                   <input placeholder="email" type = "text" value={this.state.user_email} onChange={this.handleemailChange} />
                </div>
                <div>
                   <label>Password</label> 
                   <input placeholder="password" type = "text" value={this.state.user_password} onChange={this.handlepasswordChange} />
                </div>
                <div>
                   <label>Company</label> 
                   <input placeholder="company" type = "text" value={this.state.user_company_id} onChange={this.handlecompanyChange} />
                </div>
                <div>
                   <label>Designation</label> 
                   <input placeholder="designation" type = "text" value={this.state.user_designation} onChange={this.handledesignationChange} />
                </div>
                <div>
                   <label>Role</label> 
                   <input placeholder="role" type = "text" value={this.state.user_role} onChange={this.handleroleChange} />
                </div>
                <div>
                   <label>Update User</label> 
                   <input placeholder="updateuser" type = "text" value={this.state.user_updated_by} onChange={this.handleupdateuserChange} />
                </div>
                <div>
                   <label>Update date</label> 
                   <input placeholder="update_date" type = "date" value={this.state.user_updated_date_time} onChange={this.handleupdatedateChange} />
                </div>
                <button type="submit"> Submit </button>
            </form>
        )
    }
}

export default UserForm