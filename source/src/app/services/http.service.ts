import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/Observable';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { RegistryService } from "../services/registry.service";

import { Girl } from "../models/girl";
import { Category } from "../models/category";

import { catchError, map, tap } from 'rxjs/operators';

const httpOptions = {
    headers: new HttpHeaders({ 'Content-Type': 'application/json',
        'AuthToken': '78FZtsS6tvWHw4iWNrLnbZPxF4qUK1pO'
    })
};

@Injectable()
export class HttpService {

    girlsUrl = "/api/girls";
    categoriesUrl = "/api/categories";

    constructor(private http: HttpClient,
                private registry: RegistryService) { }

    getGirls(sync: boolean = true): Observable<Girl[]> {

        if ((sync === false) && (this.registry.girls))
            return this.registry.girls;

        const girls: Observable<Girl[]> = this.http.get<Girl[]>(this.girlsUrl, httpOptions);

        this.registry.setGirls(girls);

        return girls;
    }

    getCategories(sync: boolean = true): Observable<Category[]> {

        if ((sync === false) && (this.registry.categories))
            return this.registry.categories;

        const categories: Observable<Category[]> = this.http.get<Category[]>(this.categoriesUrl, httpOptions);

        this.registry.setCategories(categories);

        return categories;
    }
}
