import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { SchedulesListComponent } from './components/schedules-list/schedules-list.component';

const routes: Routes = [
    { path: 'schedule-list', component: SchedulesListComponent }
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})

export class AppRoutingModule { }