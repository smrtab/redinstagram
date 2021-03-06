import { Component, OnInit } from '@angular/core';
import {RegistryService} from "../services/registry.service";

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss']
})
export class ListComponent implements OnInit {

  constructor(public registry: RegistryService) { }

  ngOnInit() {}

}
