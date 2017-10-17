import React from 'react';
import {Route, IndexRoute, browserHistory} from 'react-router';
import { Provider } from 'react-redux';
import App from './App';
import Home from './Components/Home';
import About from './Components/About';

//routing
// The default always brings up the banner first
//IndexRoute makes it so that if it's on the slash, it will
//also render the 2nd component App.
//The other routes are just there to catch all possible hits
//to the App page
export default (
    <Route path="/" component={App}>
      <IndexRoute component={Home}/>
      <Route path="Home" component={Home}/>
    	<Route path="About" component={About}/>
    </Route>
);
