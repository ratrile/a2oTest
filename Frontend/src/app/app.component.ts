import { Component, OnInit } from '@angular/core';
import *as M from '../assets/materialize/js/materialize.min.js'


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
   title = 'app';
   options = {};


OnInit(){
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, this.options)
}


}
