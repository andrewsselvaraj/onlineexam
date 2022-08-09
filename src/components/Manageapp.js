import React, { Component } from 'react';

class ManageApp extends Component{

    constructor(props){
        super(props);

        // Here we initialize our components state
        this.state = {
            showForm: false
        };

        this.onClick = this.onClick.bind(this);
    }

    onClick () {
        // On click we change our state – this will trigger our `render` method
        this.setState({ showForm: true });
    }

    renderForm () {
       return (
           <div> 
               <form id= "add-app">

                   <label>Application Name : </label>
                   <input type="text"> </input>

                   <label> id : </label>
                   <input type="text" ></input>

                   <label>Server details : </label>
                   <input ></input>

                   <button>Create</button>
              </form>
          </div>
       );
    }

    render() {
        // We get the state for showing the form from our components state
        const { showForm } = this.state;

        return (
            <div className='manage-app'>
                <h1>Manage Application</h1>
                <button onClick={ this.onClick }>Add New Application</button>
                <button>Change Existing Application</button>
                <button>Remove Application</button>

                {/* We want to show the form if the state is true */}
                {showForm && this.renderForm()}
            </div>
        );
    }
}

export default ManageApp