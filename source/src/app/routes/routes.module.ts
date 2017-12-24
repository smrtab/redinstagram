import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';

import { ListComponent }  from '../list/list.component';
import { ShowComponent }  from '../show/show.component';

const routes: Routes = [
    { path: '', redirectTo: '/list', pathMatch: 'full' },
    { path: 'list', component: ListComponent },
    { path: 'show/{id}', component: ShowComponent }
];

@NgModule({
    exports: [ RouterModule ],
    imports: [
        CommonModule,
        RouterModule.forRoot(routes)
    ],
    declarations: []
})
export class RoutesModule { }

