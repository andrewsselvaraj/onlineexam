import React from "react";
import CustomerService from "../services/CustomerService";


class CustomerComponent extends React.Component {

    constructor(props){
        super(props)
        this.state = {
            customer:[]
        }
    }

    componentDidMount(){
        CustomerService.getProducts().then((response)=> {
                this.setState({customer:response.data})
        });

    }

    render (){
        return (
            <div>
                <h1 className = "text-center"> Customer List </h1>
                <table className = "table table-striped">
                    <thead>
                        <tr>
                            <td> Customer Id </td>
                            <td> Customer Name </td>
                            <td> Customer Type </td>
                            <td> Customer Details </td>
                            <td> Customer Head Office </td>
                            <td> Customer Email </td>
                            <td> Customer Website </td>
                            <td> Customer Mobile </td>
                            <td> Customer Status </td>

                        </tr>
                    </thead>
                    <tbody>
                         {
                            this.state.customer.map(
                                Customer =>
                                <tr key = {Customer.customer_id}>
                                    <td> {Customer.customer_id}</td>
                                    <td>{Customer.customer_name}</td>
                                    <td>{Customer.customer_type}</td>
                                    <td>{Customer.customer_details}</td>
                                    <td>{Customer.customer_head_office}</td>
                                    <td>{Customer.customer_email}</td>
                                    <td>{Customer.customer_website}</td>
                                    <td>{Customer.customer_mobile}</td>
                                    <td>{Customer.status}</td>
                                </tr>
                            )
                         }
                    </tbody>
                </table>

            </div>
        )
    }

}

export default CustomerComponent