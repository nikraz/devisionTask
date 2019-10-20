import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable()
export class ScheduleService{
    constructor(private HttpClient: HttpClient) { }
    url = 'http://localhost:8080';
    getSchedule() {
        return this
            .HttpClient
            .get(`${this.url}/api/schedule`);
    }
}
