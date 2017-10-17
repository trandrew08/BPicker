import React, {Component} from 'react';
import {Route, IndexRoute} from 'react-router';

class About extends Component {
  render(){
    return(
      <div>
        <div className=" col-md-6 personal-profile-container">
        	<div className="profile-cover">
        		<img src="../../../img/Profile.jpg" />
        	</div>
        	<div className="about-text">
        	Lorem Ipsum
        	</div>
        </div>
      </div>
    );
  }
}
export default About;
