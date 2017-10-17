import React, {Component} from 'react';
import {Route, IndexRoute} from 'react-router';
import Nav_Bar from './Components/Nav_Bar';

class Home extends Component {
  render(){
    return(
      <div>
        <Nav_Bar/>
        {this.props.children}
      </div>
    );
  }
}
export default Home;
