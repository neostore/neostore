/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package jpamodel;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author belchiorpalma
 */
@Entity
@Table(name = "neostore_produto_categoria")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "NeostoreProdutoCategoria.findAll", query = "SELECT n FROM NeostoreProdutoCategoria n"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaCodigo", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaCodigo = :prcaCodigo"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByGrupCodigo", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.grupCodigo = :grupCodigo"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaDescricao", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaDescricao = :prcaDescricao"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaAcompanhamento", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaAcompanhamento = :prcaAcompanhamento"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaExibefly", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaExibefly = :prcaExibefly"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaTipoescolha", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaTipoescolha = :prcaTipoescolha"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaImagem", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaImagem = :prcaImagem"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaOrdem", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaOrdem = :prcaOrdem"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaObservacao", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaObservacao = :prcaObservacao"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByPrcaHashtag", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.prcaHashtag = :prcaHashtag"),
    @NamedQuery(name = "NeostoreProdutoCategoria.findByColor", query = "SELECT n FROM NeostoreProdutoCategoria n WHERE n.color = :color")})
public class NeostoreProdutoCategoria implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "prca_codigo")
    private Integer prcaCodigo;
    @Column(name = "grup_codigo")
    private Integer grupCodigo;
    @Column(name = "prca_descricao")
    private String prcaDescricao;
    @Column(name = "prca_acompanhamento")
    private String prcaAcompanhamento;
    @Column(name = "prca_exibefly")
    private String prcaExibefly;
    @Column(name = "prca_tipoescolha")
    private String prcaTipoescolha;
    @Column(name = "prca_imagem")
    private String prcaImagem;
    @Column(name = "prca_ordem")
    private String prcaOrdem;
    @Column(name = "prca_observacao")
    private String prcaObservacao;
    @Column(name = "prca_hashtag")
    private String prcaHashtag;
    @Column(name = "color")
    private String color;

    public NeostoreProdutoCategoria() {
    }

    public NeostoreProdutoCategoria(Integer prcaCodigo) {
        this.prcaCodigo = prcaCodigo;
    }

    public Integer getPrcaCodigo() {
        return prcaCodigo;
    }

    public void setPrcaCodigo(Integer prcaCodigo) {
        this.prcaCodigo = prcaCodigo;
    }

    public Integer getGrupCodigo() {
        return grupCodigo;
    }

    public void setGrupCodigo(Integer grupCodigo) {
        this.grupCodigo = grupCodigo;
    }

    public String getPrcaDescricao() {
        return prcaDescricao;
    }

    public void setPrcaDescricao(String prcaDescricao) {
        this.prcaDescricao = prcaDescricao;
    }

    public String getPrcaAcompanhamento() {
        return prcaAcompanhamento;
    }

    public void setPrcaAcompanhamento(String prcaAcompanhamento) {
        this.prcaAcompanhamento = prcaAcompanhamento;
    }

    public String getPrcaExibefly() {
        return prcaExibefly;
    }

    public void setPrcaExibefly(String prcaExibefly) {
        this.prcaExibefly = prcaExibefly;
    }

    public String getPrcaTipoescolha() {
        return prcaTipoescolha;
    }

    public void setPrcaTipoescolha(String prcaTipoescolha) {
        this.prcaTipoescolha = prcaTipoescolha;
    }

    public String getPrcaImagem() {
        return prcaImagem;
    }

    public void setPrcaImagem(String prcaImagem) {
        this.prcaImagem = prcaImagem;
    }

    public String getPrcaOrdem() {
        return prcaOrdem;
    }

    public void setPrcaOrdem(String prcaOrdem) {
        this.prcaOrdem = prcaOrdem;
    }

    public String getPrcaObservacao() {
        return prcaObservacao;
    }

    public void setPrcaObservacao(String prcaObservacao) {
        this.prcaObservacao = prcaObservacao;
    }

    public String getPrcaHashtag() {
        return prcaHashtag;
    }

    public void setPrcaHashtag(String prcaHashtag) {
        this.prcaHashtag = prcaHashtag;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (prcaCodigo != null ? prcaCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof NeostoreProdutoCategoria)) {
            return false;
        }
        NeostoreProdutoCategoria other = (NeostoreProdutoCategoria) object;
        if ((this.prcaCodigo == null && other.prcaCodigo != null) || (this.prcaCodigo != null && !this.prcaCodigo.equals(other.prcaCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "beans.NeostoreProdutoCategoria[ prcaCodigo=" + prcaCodigo + " ]";
    }
    
}
