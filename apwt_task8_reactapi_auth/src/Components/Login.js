import React, {useState, userEffect} from "react";
import axios from "axios";
import { useNavigate  } from "react-router-dom"

const Login = ()=>{
    let[token, setToken]= useState("");
    let[name, setName] = useState("");
    let[password, setPassword] =useState("");
    const navigate  = useNavigate("");

    const loginSubmit= ()=>{
        var obj = {username: name, password: password};
        axios.post("http://127.0.0.1:8000/api/login",obj)
        .then(resp=>{
            var token = resp.data;
            console.log(token);
            var customer = {cusid: token.cusid, access_token:token.token};
            localStorage.setItem('customer',JSON.stringify(customer));
            if(token == "No user found"){
                navigate('/login');
            }else{
                navigate('/allproducts');
            }
            console.log(localStorage.getItem('customer'));
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        <div>
            <form>
                Login <br></br>
                <input type="text" value={name} onChange={(e)=>setName(e.target.value)}></input><br></br>
                Password <br></br>
                <input type="password" value={password} onChange={(e)=>setPassword(e.target.value)}></input>

            </form> <br></br>
                <button onClick={loginSubmit}>Login</button>
        </div>

    )
}
export default Login;  