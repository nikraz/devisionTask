import { Component, OnInit } from '@angular/core';
import { ScheduleService } from '../../schedule.service';

@Component({
  selector: 'app-schedules-list',
  templateUrl: './schedules-list.component.html',
  styleUrls: ['./schedules-list.component.css']
})
export class SchedulesListComponent implements OnInit {

  constructor(private ScheduleService: ScheduleService) { }

  ngOnInit() {
      console.log("data");

      this.ScheduleService.getSchedule().subscribe((res)=>{
          console.log("data");
      });
  }

}
