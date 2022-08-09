import React from "react";
import CompanyService from "../services/CompanyService";


class CompanyComponent extends React.Component {

    constructor(props){
        super(props)
        this.state = {
            company:[]
        }
    }

    componentDidMount(){
        CompanyService.getProducts().then((response)=> {
                this.setState({company:response.data})
        });

    }

    render (){
        return (
            <div>
                <h1 className = "text-center"> Company List </h1>
                <table className = "table table-striped">
                    <thead>
                        <tr>
                            <td> Company Id </td>
                            <td> Company Name </td>
                            <td> Company Type  </td>
                            <td> Company Detail </td>
                            <td> Company Head Office </td>
                            <td> Company Email </td>
                            <td> Company website </td>
                            <td> Company Status</td>

                        </tr>
                    </thead>
                    <tbody>
                         {
                            this.state.company.map(
                                Company =>
                                <tr key = {Company.company_id}>
                                    <td> {Company.company_id}</td>
                                    <td>{Company.company_name}</td>
                                    <td>{Company.company_type}</td>
                                    <td>{Company.company_details}</td>
                                    <td>{Company.company_head_office}</td>
                                    <td>{Company.company_email}</td>
                                    <td>{Company.company_website}</td>
                                    <td>{Company.status}</td>
                                </tr>
                            )
                         }
                    </tbody>
                </table>

            </div>
        )
    }

}

export default CompanyComponent