import React from "react";
import ProductService from "../services/ProductService";


class ProductComponent extends React.Component {

    constructor(props){
        super(props)
        this.state = {
            products:[]
        }
    }

    componentDidMount(){
        ProductService.getProducts().then((response)=> {
                this.setState({products:response.data})
        });

    }

    render (){
        return (
            <div>
                <h1 className = "text-center"> Product List </h1>
                <table className = "table table-striped">
                    <thead>
                        <tr>
                            <td> Product Id </td>
                            <td> Product Name </td>
                            <td> Product Detail </td>
                            <td> Product Model </td>
                            <td> Product Type </td>
                            <td> Calculation Unit </td>
                            <td> Status </td>

                        </tr>
                    </thead>
                    <tbody>
                         {
                            this.state.products.map(
                                Product =>
                                <tr key = {Product.product_id}>
                                    <td> {Product.product_id}</td>
                                    <td>{Product.product_name}</td>
                                    <td>{Product.product_detail}</td>
                                    <td>{Product.product_model}</td>
                                    <td>{Product.product_type}</td>
                                    <td>{Product.calculation_unit}</td>
                                    <td>{Product.status}</td>
                                </tr>
                            )
                         }
                    </tbody>
                </table>

            </div>
        )
    }

}

export default ProductComponent