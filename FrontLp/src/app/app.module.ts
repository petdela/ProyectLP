import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CalendarSendModule } from './@components/calendar-send/calendar-send.module';
import { EventosAdminModule } from './@components/eventos-admin/eventos-admin.module';
import { EventosUpdateModule } from './@components/eventos-update/eventos-update.module';

@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    CalendarSendModule,
    EventosAdminModule,
    EventosUpdateModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
