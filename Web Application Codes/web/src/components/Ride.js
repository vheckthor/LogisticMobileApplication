import React from 'react';
import MapsPage from './MapsPage';
import './css/main.css'
import Nav from './Nav';

function Ride() {
	return (
        <div className='ride'>
            <div className='bodDiv'>
            <Nav/>
			{/* <div className='formDiv'>
                <h1>Select Ride Type</h1>
                <form>
                    <input type='text' placeholder='enter you pick up location' />
                    <input type='text' placeholder='enter you destination' className='destination'/><br/>
                    <input type='submit' value='order now' className='submit'/>
                </form>
            </div> */}
			{/* <div className='maps'> */}
			{/* <h1>Select Ride Type</h1>
                <form>
                    <input type='text' placeholder='enter you pick up location' />
                    <input type='text' placeholder='enter you destination'/>
                </form> */}
			{/* </div> */}
			<MapsPage />
		</div>
        </div>
	);
}

export default Ride;
