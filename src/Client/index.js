//library function
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Router, browserHistory, hashHistory} from 'react-router';
import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';

import reduxThunk from 'redux-thunk';
import routes from './routes';
import ReduxPromise from 'redux-promise';


//This renders the routes defined in routes.js
ReactDOM.render(
	<Router history={browserHistory} routes={routes}/>
	, document.querySelector('.container'));
