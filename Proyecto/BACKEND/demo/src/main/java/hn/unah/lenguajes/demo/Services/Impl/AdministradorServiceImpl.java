package hn.unah.lenguajes.demo.Services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.demo.Entities.Administrador;
import hn.unah.lenguajes.demo.Repositories.AdministradorRepository;
import hn.unah.lenguajes.demo.Services.AdministradorService;

@Service
public class AdministradorServiceImpl implements AdministradorService {

    @Autowired
    private AdministradorRepository administradorRepository;

    @Override
    public Administrador crearAdmnistrador(Administrador admnistrador) {
        return this.administradorRepository.save(admnistrador); 
    }

    @Override
    public Administrador autenticarAdmin(String correo, String contrasenia) {
        
        Administrador administrador = administradorRepository.findByCorreo(correo);

        if (administrador != null && contrasenia.equals(administrador.getContrasenia())){
            return administrador;
        }else{
            return null;
        }

    }
}
