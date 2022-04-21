import React, { useState ,useEffect  } from 'react';
import ReactDOM from 'react-dom';
import store from '../storeredux/store'
import { Provider } from 'react-redux'

import { useSelector, useDispatch } from 'react-redux'
import { decrement, increment ,incrementByAmount ,decrementByAmount ,setinitialcountervalue} from '../storeredux/counterSlice'

function Example() {

    const count = useSelector((state) => state.counter.value)
    const dispatch = useDispatch()
    useEffect(() => {
     axios.get('/api/count')
      .then((response) => {
          dispatch(setinitialcountervalue(response.data.allData.count))
      }).catch((error) => {
          console.log(error)
     })
    }, []);

    let Increment=()=>{
     
     axios.get('/api/count-increment')
      .then((response) => {
           dispatch(increment())
      }).catch((error) => {
          console.log(error)
     })
        
    }
    let Decrement=()=>{
     
        axios.get('/api/count-decrement')
         .then((response) => {
            dispatch(decrement())
         }).catch((error) => {
             console.log(error)
        })
           
    }
    let Increment100=()=>{
     
        axios.get('/api/count-increment-100')
         .then((response) => {
            dispatch(incrementByAmount(100))
         }).catch((error) => {
             console.log(error)
        })
           
       }
       let Decrement100=()=>{
        
           axios.get('/api/count-decrement-100')
            .then((response) => {
                dispatch(decrementByAmount(100))
            }).catch((error) => {
                console.log(error)
           })
              
       }
    return (
        <div className="container">
            <br/><br/><br/>
            <center>
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Laravel React Redux Counter</div>
                        <div className="card-body">
                        <img src="/l2vicl71wmxtcgob0gu2.webp" style={{width:'200px'}}/>
                        <br/><br/>
                        <button aria-label="Increment value" onClick={Decrement100} className='btn btn-primary' >Decrement by 100</button>
                        &nbsp;&nbsp;
                        <button aria-label="Decrement value" onClick={Decrement} className='btn btn-primary'>Decrement</button> 

                         <p style={{paddingLeft:'20px',paddingRight:'20px',fontSize:'50px'}}>
                           Count: &nbsp; {count}
                         </p>
                         
                        <button aria-label="Increment value" onClick={Increment100} className='btn btn-primary' >Increment by 100</button>
                        &nbsp;&nbsp;
                        <button aria-label="Increment value" onClick={Increment} className='btn btn-primary' >Increment</button>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
            </center>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(
    
    <Provider store={store}>
        <Example />
    </Provider>
    
    , 
    document.getElementById('example'));
}
