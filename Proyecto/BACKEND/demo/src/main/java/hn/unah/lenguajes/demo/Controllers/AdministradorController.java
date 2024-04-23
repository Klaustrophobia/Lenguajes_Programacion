package hn.unah.lenguajes.demo.Controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RestController;

import hn.unah.lenguajes.demo.Entities.Administrador;
import hn.unah.lenguajes.demo.Services.Impl.AdministradorServiceImpl;

import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;


@RestController
@RequestMapping("/api")
public class AdministradorController {

    @Autowired
    private AdministradorServiceImpl administradorServiceImpl;

    @PostMapping("/admin/crear")
    public Administrador crearAdmnistrador(@RequestBody Administrador administrador) {
        return this.administradorServiceImpl.crearAdmnistrador(administrador);
    }
    


}
