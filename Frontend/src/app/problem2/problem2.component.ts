import { ProblemsService } from './../services/problems.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-problem2',
  templateUrl: './problem2.component.html',
  styleUrls: ['./problem2.component.css']
})
export class Problem2Component implements OnInit {
  route : string = '/problem-2';
  data={
    data: null
  };
  
  resp = {};

   
  constructor(private problemservice :ProblemsService ) { }

  ngOnInit() {

  }
  goBack(){
    console.log('ruta');
  }

  Save(){
    this.problemservice.save(this.data,this.route).subscribe((data)=>{
      this.resp=data;
    }, (error)=>{
      console.log(error)}     
    );
  }
}
