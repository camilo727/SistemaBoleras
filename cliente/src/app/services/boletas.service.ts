import { Injectable } from '@angular/core';
import { HttpClient ,HttpHeaders} from '@angular/common/http';
import { Clientes } from './../interfaces/clientes';
@Injectable({
  providedIn: 'root'
})
export class BoletasService {
  _url='http://127.0.0.1:8000/api/boletos'
  private api = 'http://127.0.0.1:8000/api/GuardarCliente';
  constructor(
    private http:HttpClient
  ) {
    console.log('boletas service')
   }
   getBoletas(){
    let header = new HttpHeaders()
      .set('Type-content','aplication/jason')
    return this.http.get(this._url,{
      headers:header
    });
   }
   createCliente(clientes: Clientes) {
   const path = `${this.api}`;
   console.log(path)
   return this.http.post<Clientes>(path, clientes);
   }
}
