import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule, HttpClient } from '@angular/common/http';

import { AppComponent } from './app.component';
import { ListComponent } from './list/list.component';
import { SearchComponent } from './search/search.component';
import { ShowComponent } from './show/show.component';

import { HttpService } from './services/http.service';
import { RegistryService } from './services/registry.service';
import { RoutesModule } from './routes/routes.module';

@NgModule({
    declarations: [
        AppComponent,
        ListComponent,
        SearchComponent,
        ShowComponent
    ],
    imports: [
        BrowserModule,
        HttpClientModule,
        RoutesModule,
    ],
    providers: [
        HttpService,
        RegistryService
    ],
    bootstrap: [AppComponent]
})
export class AppModule { }
