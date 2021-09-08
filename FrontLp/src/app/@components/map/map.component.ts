import { Component, OnInit } from '@angular/core';
declare const L: any;

@Component({
  selector: 'app-map',
  templateUrl: './map.component.html',
  styleUrls: ['./map.component.css']
})
export class MapComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {

    let mymap = L.map('mapid').setView([-2.203816, -79.897453], 10);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoicm9kZW1vcmUiLCJhIjoiY2t0MHYzYjlhMDkwdDJvbm1kMWR3ZWVzMiJ9.STQ27_RMlKmIRMmGFrP-GA', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'your.mapbox.access.token'
  }).addTo(mymap);

  var marker = L.marker([-2.180061, -79.9053203]).addTo(mymap);
  marker.bindPopup(`
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h3 class="card-title"><b>GYE TECH: Clojure, la ciencia de lo simple.</b></h3>
      <h6 class="card-subtitle"><b>Tecnología</b> - 5/09/2021</h6>
      <p class="card-text">Tercera charla de la iniciativa Guayaquil tech. Una oportunidad de conocer nuevas tecnologías de de mejorar la red de contactos conectando y convocando a grandes desarrolladores de la ciudad de Guayaquil</p>
      <a href="http://localhost:4200/calendar/1" class="btn btn-success" style="width:100%; color:white;">Agregar al calendario</a>
      <a href="http://localhost:4200/eventos/update/1" class="btn btn-secondary" style="width:100%; color:white;">Editar Evento</a>
    </div>
  </div>
  `).openPopup();


  var marker = L.marker([-2.1552202, -79.8948806]).addTo(mymap);
  marker.bindPopup(`
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h3 class="card-title"><b>Fiesta destructiva en casa de Robert</b></h3>
      <h6 class="card-subtitle"><b>Entretenimiento</b> - 5/09/2021</h6>
      <p class="card-text">Cansado y estresado por el semestre? <br> Te fue bien en los examenes? Ven y celebra con nosotros <br> Te fue mal en los examenes? Ven y llora con nosotros.  </p>
      <button class="btn btn-success" style="width:100%">Agregar al calendario</button>
      <button class="btn btn-secondary" style="width:100%">Editar Evento</button>
    </div>
  </div>
  `).openPopup();

  
  }

}
