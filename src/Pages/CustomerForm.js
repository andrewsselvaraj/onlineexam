import React, {Component} from "react";
import axios from 'axios'

class CustomerForm extends Component {
    constructor(props){
        super(props)

        this.state = {

        }
    }

    handleCustomeridChange = (event) => {
        this.setState({
            customer_id: event.target.value
        })
    }

    handleCustomernameChange = (event) => {
        this.setState({
            customer_name: event.target.value
        })
    }

    handleCustomertypeChange = (event) => {
        this.setState({
            customer_type: event.target.value
        })
    }


    handleCustomerdetailsChange = (event) => {
        this.setState({
            customer_details: event.target.value
        })
    }
    
    handlecustomerhdoffChange = (event) => {
        this.setState({
            customer_head_office: event.target.value
        })
    }


    handleCustomeremailChange = (event) => {
        this.setState({
            customer_email: event.target.value
        })
    }


    handleCustomerwebsiteChange = (event) => {
        this.setState({
            customer_website: event.target.value
        })
    }


    handleCustomermobileChange = (event) => {
        this.setState({
            customer_mobile: event.target.value
        })
    }


    handleCreatedbyChange = (event) => {
        this.setState({
            created_by: event.target.value
        })
    }


    handleCreateduserChange = (event) => {
        this.setState({
            created_user_company_id: event.target.value
        })
    }


    handleUpdateddateChange = (event) => {
        this.setState({
            updated_date_time: event.target.value
        })
    }


    handlestatusChange = (event) => {
        this.setState({
            status: event.target.value
        })
    }

  

    submitHandler = (event) => {
        event.preventDefault()
        console.log(this.state)
        axios
            .post('http://localhost:8000/ims/newcust',this.state)
            .then(response => {
                console.log(response)
                alert("Customer created successfully")
            })
            .catch(error => {
                console.log(error)
            })

    }

    
    render() {
        return (
            <form onSubmit={this.submitHandler}>
                <div>
                   <label>Customer Id</label> 
                   <input placeholder="customerid" type = "text" value={this.state.customer_id} onChange={this.handleCustomeridChange} />
                </div>
                <div>
                   <label>Customer Name</label> 
                   <input placeholder="customername" type = "text" value={this.state.customer_name} onChange={this.handleCustomernameChange} />
                </div>
                <div>
                   <label>Customer Type</label> 
                   <input placeholder="customertype" type = "text" value={this.state.customer_type} onChange={this.handleCustomertypeChange} />
                </div>
                <div>
                   <label>Customer Details</label> 
                   <input placeholder="customerdetails" type = "text" value={this.state.customer_details} onChange={this.handleCustomerdetailsChange} />
                </div>
                <div>
                   <label>Head Office</label> 
                   <input placeholder="customerhdoff" type = "text" value={this.state.customer_head_office} onChange={this.handlecustomerhdoffChange} />
                </div>
                <div>
                   <label>Email</label> 
                   <input placeholder="customeremail" type = "text" value={this.state.customer_email} onChange={this.handleCustomeremailChange} />
                </div>
                <div>
                   <label>Website</label> 
                   <input placeholder="customerwebsite" type = "text" value={this.state.customer_website} onChange={this.handleCustomerwebsiteChange} />
                </div>
                <div>
                   <label>Mobile</label> 
                   <input placeholder="customermobile" type = "text" value={this.state.customer_mobile} onChange={this.handleCustomermobileChange} />
                </div>
                <div>
                   <label>Created By</label> 
                   <input placeholder="createdby" type = "text" value={this.state.created_by} onChange={this.handleCreatedbyChange} />
                </div>
                <div>
                   <label>Created by Company</label> 
                   <input placeholder="createdbycompany" type = "text" value={this.state.created_company_id} onChange={this.handleCreateduserChange} />
                </div>
                <div>
                   <label>Updated Date</label> 
                   <input placeholder="updateddate" type = "date" value={this.state.updated_date_time} onChange={this.handleUpdateddateChange} />
                </div>
                <div>
                   <label>Status</label> 
                   <input placeholder="status" type = "text" value={this.state.status} onChange={this.handlestatusChange} />
                </div>
                <button type="submit"> Submit </button>
            </form>

        )
    }
}

export default CustomerForm