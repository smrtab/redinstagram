import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/Observable';

import { Girl } from '../models/girl';
import { Category } from '../models/category';
import { Content } from '../models/content';

import 'rxjs/add/operator/map';
import 'rxjs/add/observable/of';

@Injectable()
export class RegistryService {

    //Girls
    private __girls: Girl[];
    get girls(): Observable<Girl[]> {
        return Observable.of(this.__girls);
    }
    setGirls(girls: Observable<Girl[]>) {
        girls.subscribe(grls => {
            this.__girls = grls;
        });
    }

    //Categories
    private __categories: Category[];
    get categories(): Observable<Category[]> {
        return Observable.of(this.__categories);
    }
    setCategories(categories: Observable<Category[]>) {
        categories.subscribe(ctgs => {
            this.__categories = ctgs;
        });
    }

    //Contents
    private __contents: Content[];
    get contents(): Observable<Content[]> {
        return Observable.of(this.__contents);
    }

    constructor() { }

}
