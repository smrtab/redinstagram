import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/Observable';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { RegistryService } from "../services/registry.service";
import { Girl } from "../models/girl";
import { catchError, map, tap } from 'rxjs/operators';

const httpOptions = {
    headers: new HttpHeaders({ 'Content-Type': 'application/json',
        'AuthToken': '78FZtsS6tvWHw4iWNrLnbZPxF4qUK1pO'
    })
};

@Injectable()
export class HttpService {

    girlsUrl = "/api/girls";

    constructor(private http: HttpClient,
                private registry: RegistryService) { }

    getGirls(sync: boolean = true): Observable<Girl[]> {

        if ((sync === false) && (this.registry.girls))
            return this.registry.girls;

        const girls: Observable<Girl[]> = this.http.get<Girl[]>(this.girlsUrl, httpOptions);

        this.registry.setGirls(girls);

        return girls;
    }

}
