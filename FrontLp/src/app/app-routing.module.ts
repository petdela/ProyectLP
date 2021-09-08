import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EventosAdminComponent } from './@components/eventos-admin/eventos-admin.component';
import { EventosUpdateComponent } from './@components/eventos-update/eventos-update.component';
import {MapComponent} from './@components/map/map.component'
const routes: Routes = [
  {path: 'eventos/save', component: EventosAdminComponent},
  {path: 'eventos/update', component: EventosUpdateComponent},
  {path: '', component: MapComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
