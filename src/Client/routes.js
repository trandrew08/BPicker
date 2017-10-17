import React from 'react';
import {Route, IndexRoute, browserHistory} from 'react-router';
import { Provider } from 'react-redux';
import main from './Components/main';
import About from './Components/About';

//routing
// The default always brings up the banner first
//IndexRoute makes it so that if it's on the slash, it will
//also render the 2nd component App.
//The other routes are just there to catch all possible hits
//to the home page
export default (
    <Route path="/" component={main}>
    	<IndexRoute component={About}/>
    	<Route path="/About" component={About}/>
    </Route>
);