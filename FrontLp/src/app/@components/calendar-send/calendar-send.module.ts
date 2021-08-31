import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CalendarSendComponent } from './calendar-send.component';



@NgModule({
  declarations: [CalendarSendComponent],
  imports: [
    CommonModule
  ],
  exports : [CalendarSendComponent],
})
export class CalendarSendModule { }
