import { ProblemsService } from './../services/problems.service';
import { Component, OnInit, Input } from '@angular/core';
import {  Router } from '@angular/router';

@Component({
  selector: 'app-problem1',
  styleUrls: ['./problem1.component.css'],
  templateUrl: './problem1.component.html',
})
export class Problem1Component implements OnInit {
  
  
  route : string =  "/problem-1";  
  data={
    valor: null
  };
  
  resp = {};
 
   

  constructor(private problemservice: ProblemsService, private routes : Router ) { }

  ngOnInit() {
  }


  Save(){
    this.problemservice.save(this.data, this.route).subscribe((data)=>{
      this.resp=data;
    }, (error)=>{
      console.log(error)}     
    );
  }

}
