import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CalendarSendModule } from './@components/calendar-send/calendar-send.module';
import { EventosAdminModule } from './@components/eventos-admin/eventos-admin.module';
@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    CalendarSendModule,
    EventosAdminModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
