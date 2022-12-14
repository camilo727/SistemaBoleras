import { Component } from '@angular/core';
import { BoletasService } from './services/boletas.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'cliente';
  public boleta: Array<any>=[]
  constructor(
    private boletasServices:BoletasService
  ){
    this.boletasServices.getBoletas().subscribe((resp:any)=>{
      console.log(resp)
      this.boleta=resp
    })
  }
  createCliente() {
    const Cliente = {
      Nombre: 'Oneida maria sanchez',
      Correo: 'mariaOneida@hotmail.com',
      telefono: '3223280873'
    };
    this.boletasServices.createCliente(Cliente)
    .subscribe((newClientes) => {
      console.log(newClientes);
    });
  }

  
}
