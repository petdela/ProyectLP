import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CalendarSendComponent } from './@components/calendar-send/calendar-send.component';
import { EventosAdminComponent } from './@components/eventos-admin/eventos-admin.component';
import { EventosUpdateComponent } from './@components/eventos-update/eventos-update.component';
<<<<<<< HEAD
import { MapComponent } from './@components/map/map.component';

=======
import {MapComponent} from './@components/map/map.component'
>>>>>>> 5df15fabfba5c82890800e6006bf17c50d07f238
const routes: Routes = [
  {path: '', component:MapComponent},
  {path: 'eventos/save', component: EventosAdminComponent},
<<<<<<< HEAD
  {path: 'eventos/update/:id', component: EventosUpdateComponent},
  {path: 'calendar/:id', component: CalendarSendComponent}
=======
  {path: 'eventos/update', component: EventosUpdateComponent},
  {path: '', component: MapComponent}
>>>>>>> 5df15fabfba5c82890800e6006bf17c50d07f238
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
