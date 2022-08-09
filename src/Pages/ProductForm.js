import React, {Component} from "react";
import axios from 'axios'

class UserForm extends Component {
    constructor(props){
        super(props)

        this.state = {
            product_id: '',
            product_name: '',
            product_detail: '',
            product_model: '',
            product_type: '',
            calculation_unit: '',
            created_by: '',
            created_user_company_id: '',
            created_date_time: '',
            status: ''
        }
    }

    handleProdidChange = (event) => {
        this.setState({
            product_id: event.target.value
        })
    }


    handleProdnameChange = (event) => {
        this.setState({
            product_name: event.target.value
        })
    }


    handleProddetailChange = (event) => {
        this.setState({
            product_detail: event.target.value
        })
    }


    handleProdmodelChange = (event) => {
        this.setState({
            product_model: event.target.value
        })
    }

    
    handleProdtypeChange = (event) => {
        this.setState({
            product_type: event.target.value
        })
    }


    handleProdcalcunitChange = (event) => {
        this.setState({
            calculation_unit: event.target.value
        })
    }


    handleProdcreatedbyChange = (event) => {
        this.setState({
            created_by: event.target.value
        })
    }


    handleProdcreatcmpidChange = (event) => {
        this.setState({
            created_user_company_id: event.target.value
        })
    }


    handleProdcreatdateChange = (event) => {
        this.setState({
            created_date_time: event.target.value
        })
    }

    handleProdstatusChange = (event) => {
        this.setState({
            status: event.target.value
        })
    }

    

    submitHandler = (event) => {
        event.preventDefault()
        console.log(this.state)
        axios
            .post('http://localhost:8000/ims/newprod',this.state)
            .then(response => {
                console.log(response)
                alert("User Successfully saved")
            })
            .catch(error => {
                console.log(error)
            })

    }

    
    render() {
        return (
            <form onSubmit={this.submitHandler}>
                <div>
                   <label>Product Id</label> 
                   <input placeholder="prodid" type = "text" value={this.state.product_id} onChange={this.handleProdidChange} />
                </div>

                <div>
                   <label>Product Name</label> 
                   <input placeholder="prodname" type = "text" value={this.state.product_name} onChange={this.handleProdnameChange} />
                </div>

                <div>
                   <label>Product detail</label> 
                   <input placeholder="proddetail" type = "text" value={this.state.product_detail} onChange={this.handleProddetailChange} />
                </div>

                <div>
                   <label>Product Model</label> 
                   <input placeholder="prodmodel" type = "text" value={this.state.product_model} onChange={this.handleProdmodelChange} />
                </div>

                <div>
                   <label>Product Type</label> 
                   <input placeholder="prodtype" type = "text" value={this.state.product_type} onChange={this.handleProdtypeChange} />
                </div>

                <div>
                   <label>Calculation Unit</label> 
                   <input placeholder="calcunit" type = "text" value={this.state.calculation_unit} onChange={this.handleProdcalcunitChange} />
                </div>

                <div>
                   <label>Created By</label> 
                   <input placeholder="createdby" type = "text" value={this.state.created_by} onChange={this.handleProdcreatedbyChange} />
                </div>

                <div>
                   <label>Creted by user</label> 
                   <input placeholder="createdbyuser" type = "text" value={this.state.created_user_company_id} onChange={this.handleProdcreatcmpidChange} />
                </div>

                <div>
                   <label>Created Date</label> 
                   <input placeholder="createddatetime" type = "text" value={this.state.created_date_time} onChange={this.handleProdcreatdateChange} />
                </div>

                <div>
                   <label>Status</label> 
                   <input placeholder="status" type = "text" value={this.state.status} onChange={this.handleProdstatusChange} />
                </div>
                <button type="submit"> Submit </button>
            </form>
        )
    }
}

export default UserForm