import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { Route,RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import {HttpClientModule} from '@angular/common/http';
import { Problem1Component } from './problem1/problem1.component';
import { Problem2Component } from './problem2/problem2.component';

import {FormsModule} from '@angular/forms';


const routes: Route[] = [
  
    {path: '', component: Problem1Component},
    {path: 'problem-1', component : Problem1Component },
    {path: 'problem-2', component : Problem2Component },

];


@NgModule({
  declarations: [
    AppComponent,
    Problem1Component,
    Problem2Component,

  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes),
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
