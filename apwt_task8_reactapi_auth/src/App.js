import * as React from "react";
import Navbar from "react-bootstrap/Navbar";
import Container from "react-bootstrap/Container";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";
import "bootstrap/dist/css/bootstrap.css";

import { BrowserRouter as Router , Routes, Route, Link } from "react-router-dom";


import LoginAPI from './Components/Login';
function App() {

  const Style={
    color: "white",
    backgroundColor: "#3399FF",
    padding: "10px",
    fontFamily: "Sans-Serif",
  };
  return (<Router>
    <Navbar bg="primary">
    <Container>
      <Link to={"/"} className="navbar-brand text-white">
        Sanofy
      </Link>
      <span style={Style}>
      <Link to={"/login"} className="navbar-brand text-white">
        Log In
      </Link>
      <Link to={"/signout"} className="navbar-brand text-white">
        Sign Out
      </Link>

      </span>
    </Container>
  </Navbar>

  <Container className="mt-5">
    <Row>
      <Col md={12}>
        <Routes>
          {/* <Route path="/product/create" element={<CreateProduct />} /> */}
          {/* <Route path="/product/edit/:id" element={<EditProduct />} /> */}
          <Route exact path='/login' element={<LoginAPI />} />
        </Routes>
      </Col>
    </Row>
  </Container>
  <br></br>
  
</Router>)
}

export default App;
