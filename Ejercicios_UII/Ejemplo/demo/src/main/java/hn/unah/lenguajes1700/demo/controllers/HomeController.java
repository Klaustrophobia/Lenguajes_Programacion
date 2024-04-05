package hn.unah.lenguajes1700.demo.controllers;

import org.springframework.web.bind.annotation.RestController;

import hn.unah.lenguajes1700.demo.dtos.Usuarios;
import hn.unah.lenguajes1700.demo.servicios.impl.UsuariosServiciosImpl;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.PostMapping;





@RestController
@RequestMapping("/home")
public class HomeController {
    @Autowired
    // Se utiliza la implementacion
    private UsuariosServiciosImpl usuarioService;
    
    @PostMapping("/usuario/add")
    public String addUsuario(@RequestBody Usuarios usuarioDTO) {
        return this.usuarioService.addUsuario(usuarioDTO);
    }
    
    @GetMapping("/usuario/buscar/{email}")
    public Usuarios buscarUserEmail(@RequestParam String email) {
        return this.usuarioService.buscarUserEmail(email);
    }
    
    @GetMapping("/saludo/{nombre}/{apellido}")
    public String saludo(@PathVariable String nombre, 
                         @PathVariable String apellido){
        // Return imprime en el postman
        return "Hola Mundo de " + nombre + " " + apellido;
    }
    // Cuando la funcion es Void se imprime con System.out.println()
    // cuando la funcion es string se imprime con return

    @GetMapping("/despedida/")
    public String despedida(@RequestParam(name="titulo") String titulo){
        /*  
        System.out.println imprime en la consola
        System.out.println("Adios Mundo");
        */
        return "Adios Mundo " + titulo;
    }
    @GetMapping("/usuario")
    public String mostrarUsuario(@RequestBody Usuarios usuarioDto){
        // return usuarioDto.toString();
        return "La clave del usuario es: " + usuarioDto.getPassword();
    }


}

