import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ProblemsService {

  constructor(private httpClient : HttpClient) { 

  }
  API_ENDPOINT = 'http://localhost:8000/api';
  
  save(data : any, route :string){
    const headers = new HttpHeaders({'content-Type':'application/json'});
   return this.httpClient.post(this.API_ENDPOINT + route, data, {headers : headers} );
   
   }
}
