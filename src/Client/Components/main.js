import React, {Component} from 'react';
import {Route, IndexRoute} from 'react-router';
import Nav_Bar from './Nav_Bar';
class main extends Component {
  render(){
    return(
      <div>
        <Nav_Bar/>
        {this.props.children}
      </div>
    );
  }
}
export default main;