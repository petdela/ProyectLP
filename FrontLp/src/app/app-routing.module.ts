import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EventosAdminComponent } from './@components/eventos-admin/eventos-admin.component';

const routes: Routes = [
  {path: 'eventos', component: EventosAdminComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
