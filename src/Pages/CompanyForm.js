import React, {Component} from "react";
import axios from 'axios'

class CompanyForm extends Component {
    constructor(props){
        super(props)

        this.state = {
            company_id: '',
            company_name: '',
            company_type: '',
            company_details: '',
            company_head_office: '',
            company_email: '',
            company_website: '',
            created_by: '',
            updated_date_time: '',
            status: ''

        }
    }

    handleCompanyidChange = (event) => {
        this.setState({
            company_id: event.target.value
        })
    }

    handleCompanynameChange = (event) => {
        this.setState({
            company_name: event.target.value
        })
    }

    handleCompanytypeChange = (event) => {
        this.setState({
            company_type: event.target.value
        })
    }

    handleCompanydetailsChange = (event) => {
        this.setState({
            company_details: event.target.value
        })
    }

    handleCompanyhdoffChange = (event) => {
        this.setState({
            company_head_office: event.target.value
        })
    }

    handleCompanyemailChange = (event) => {
        this.setState({
            company_email : event.target.value
        })
    }
    
    handleCompanywebsiteChange = (event) => {
        this.setState({
            company_website: event.target.value
        })
    }

    handleCreatedbyChange = (event) => {
        this.setState({
            created_by: event.target.value
        })
    }

    handleupdateddatetimeChange = (event) => {
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
            .post('http://localhost:8000/ims/newcmp',this.state)
            .then(response => {
                console.log(response)
                alert("Company created successfully")
            })
            .catch(error => {
                console.log(error)
            })

    }

    
    render() {
        return (
            <form onSubmit={this.submitHandler}>
                <div>
                   <label>Id</label> 
                   <input placeholder="companyid" type = "text" value={this.state.company_id} onChange={this.handleCompanyidChange} />
                </div>
                <div>
                   <label>Name</label> 
                   <input placeholder="companyname" type = "text" value={this.state.company_name} onChange={this.handleCompanynameChange} />
                </div>
                <div>
                   <label>Company Type</label> 
                   <input placeholder="companytype" type = "text" value={this.state.company_type} onChange={this.handleCompanytypeChange} />
                </div>
                <div>
                   <label>Company Details</label> 
                   <input placeholder="companydetails" type = "text" value={this.state.company_details} onChange={this.handleCompanydetailsChange} />
                </div>
                <div>
                   <label>Head Office</label> 
                   <input placeholder="companyheadoffice" type = "text" value={this.state.company_head_office} onChange={this.handleCompanyhdoffChange} />
                </div>
                <div>
                   <label>Email</label> 
                   <input placeholder="companyemail" type = "text" value={this.state.company_email} onChange={this.handleCompanyemailChange} />
                </div>
                <div>
                   <label>Website</label> 
                   <input placeholder="companyemail" type = "text" value={this.state.company_website} onChange={this.handleCompanywebsiteChange} />
                </div>
                <div>
                   <label>Created By</label> 
                   <input placeholder="createdby" type = "text" value={this.state.created_by} onChange={this.handleCreatedbyChange} />
                </div>
                <div>
                   <label>Updated Date</label> 
                   <input placeholder="updateddate" type = "date" value={this.state.updated_date_time} onChange={this.handleupdateddatetimeChange} />
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

export default CompanyForm