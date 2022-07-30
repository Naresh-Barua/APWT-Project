import React, { useState } from "react";
import DatePicker from 'react-datepicker';  
import Form from 'react-bootstrap/Form'
import Button from 'react-bootstrap/Button'
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import axios from 'axios'
import Swal from 'sweetalert2';
import { useNavigate } from 'react-router-dom'


export default function CreateProduct() {
  const navigate = useNavigate();

  const [name, setName] = useState("")
  const [dob, setDob] = useState("")
  const [weight, setWeight] = useState("")
  const [type, setType] = useState("")
  const [ins, setIns] = useState("")
  const [sub, setSub] = useState("")
  const [address, setAddress] = useState("")
  const [validationError,setValidationError] = useState({})

  

  const createProduct = async (e) => {
    e.preventDefault();

    const formData = new FormData()

    formData.append('name', name)
    formData.append('dob', dob)
    formData.append('weight', weight)
    formData.append('type', type)
    formData.append('ins', ins)
    formData.append('sub', sub)
    formData.append('address', address)

    await axios.post(`http://localhost:8000/api/prescription/list`, formData).then(({data})=>{
      Swal.fire({
        icon:"success",
        text:data.message
      })
      navigate("/")
    }).catch(({response})=>{
      if(response.status===422){
        setValidationError(response.data.errors)
      }else{
        Swal.fire({
          text:response.data.message,
          icon:"error"
        })
      }
    })
  }

  return (
    <div className="container">
      <div className="row justify-content-center">
        <div className="col-12 col-sm-12 col-md-6">
          <div className="card">
            <div className="card-body">
              <h4 className="card-title">Create Prescription</h4>
              <hr />
              <div className="form-wrapper">
                {
                  Object.keys(validationError).length > 0 && (
                    <div className="row">
                      <div className="col-12">
                        <div className="alert alert-danger">
                          <ul className="mb-0">
                            {
                              Object.entries(validationError).map(([key, value])=>(
                                <li key={key}>{value}</li>   
                              ))
                            }
                          </ul>
                        </div>
                      </div>
                    </div>
                  )
                } 
                <Form onSubmit={createProduct}>
                  <Row> 
                      <Col>
                        <Form.Group controlId="Name">
                            <Form.Label>Name</Form.Label>
                            <Form.Control type="text" value={name} onChange={(event)=>{
                              setName(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>  
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Date of Birth">
                            <Form.Label>Date of Birth</Form.Label>
                            <Form.Control type="date" rows={3} value={dob} onChange={(event)=>{
                              setDob(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Weight">
                            <Form.Label>Weight</Form.Label>
                            <Form.Control type="text" rows={3} value={weight} onChange={(event)=>{
                              setWeight(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Catagories">
                            <Form.Label>Disease Catagories: </Form.Label>
                            <select id="type" defaultValue="Select fruit"
                              onChange={(e) => setType(e.target.value)}> <br></br>
                                <option value=""></option>
                                <option value="Cold & Fever">Cold & Fever</option>
                                <option value="Allergy">Allergy</option>
                                <option value="Diarrhea">Diarrhea</option>
                                <option value="Cavities">Cavities</option>
                      </select></Form.Group>
                      </Col>
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Ins">
                            <Form.Label>Ins</Form.Label>
                            <Form.Control type="text" rows={3} value={ins} onChange={(event)=>{
                              setIns(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Sub">
                            <Form.Label>Sub</Form.Label>
                            <Form.Control type="textarea" rows={3} value={sub} onChange={(event)=>{
                              setSub(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>
                  </Row>
                  <Row className="my-3">
                      <Col>
                        <Form.Group controlId="Address">
                            <Form.Label>Address</Form.Label>
                            <Form.Control as="textarea" rows={3} value={address} onChange={(event)=>{
                              setAddress(event.target.value)
                            }}/>
                        </Form.Group>
                      </Col>
                  </Row>
                  <Button variant="primary" className="mt-2" size="lg" block="block" type="submit">
                    Add...
                  </Button>
                </Form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}