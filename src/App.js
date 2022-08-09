import Sidebar from './components/Sidebar'
import { BrowserRouter as Router, Routes, Route} from 'react-router-dom';
import UserComponent from './Pages/UserComponent';
import ProductComponent from './Pages/ProductComponent';
import CompanyComponent from './Pages/CompanyComponent';
import CustomerComponent from './Pages/CustomerComponent';
import UserForm from './Pages/UserForm';
import CompanyForm from './Pages/CompanyForm';
import CustomerForm from './Pages/CustomerForm';
import ProductForm from './Pages/ProductForm';

function App() {
  return (
        <div className = "main">
            
            <Router>
                  <Sidebar />
                  <Routes>
                        <Route path='/viewuser' element ={<UserComponent />} />
                        <Route path='/viewcompany' element ={<CompanyComponent />} />
                        <Route path='/viewcustomer' element ={<CustomerComponent />} />
                        <Route path='/viewproduct' element ={<ProductComponent />} />
                        <Route path='/createuser' element ={<UserForm />} />
                        <Route path='/createcompany' element ={<CompanyForm />} />
                        <Route path='/createcustomer' element ={<CustomerForm />} />
                        <Route path='/createproduct' element ={<ProductForm />} />
                  </Routes>
            </Router>
            
            {/* <div className = "container">
                  <h1 className="title"> My React App </h1>
                  <p className="info"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                  <button className="btn">Explore now</button>
            </div> */}
            
        </div>
  )
}

export default App
