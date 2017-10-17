//BANNER IS ITS OWN THING BECAUSE WE NEED TO RENDER IT SEPARATELY
//FROM OTHERS SINCE IT NEEDS TO BE PERSISTENT
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Link} from 'react-router';
import { connect } from 'react-redux';

class Nav_Bar extends Component{

  render(){
    return(
      <div className="navbar navbar-default navbar-fixed-top" role="navigation">
        <div className="container">
            <div className="navbar-header">

              <div className="navbar-brand navbar-left" style={{marginTop: "6px"}}>
                ANDREW TRAN</div>

                <button type="button" className="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span className="icon-bar"></span>
                    <span className="icon-bar"></span>
                    <span className="icon-bar"></span>
                </button>


            </div>
            <div className="collapse navbar-collapse navbar-right">
                <ul className="nav navbar-nav">
                    <li><Link to="/About">About</Link></li>
                    <li><Link to="/Projects">Project</Link></li>
                </ul>
                <ul className="nav navbar-nav navbar-right">
                  <li><Link to="/Contact">Contact</Link></li>
                </ul>
                
            </div>
        </div>
    </div>
    );
  }
};


//Connect the reducer to the container
export default Nav_Bar;